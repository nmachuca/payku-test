<?php

namespace App\Services;

use App\Models\Movement;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use App\Models\User;

class PaykuService
{
    public static function processTestRequest(int $question_id) : array
    {
        $data = [];
        switch($question_id) {
            case 1:
                $data = self::highestSalaryName();
                break;
            case 2:
                $data = self::getTotalTransactionsAmountLowerThan();
                break;
            case 3:
                $data = self::getTransactionsGroupedByPaymentMethod();
                break;
            case 4:
                $data = self::getTransactionsByUserExpenses();
                break;
            case 5:
                $data = self::getTransactionsByUserCount();
                break;
            case 6:
                $data = self::getMovementsByUser();
                break;
            case 7:
                $data = self::getUnusedPaymentMethods();
                break;
            case 8:
                $data = self::getTotalTransactionsByRegion();
                break;
            default:
                break;
        }
        return $data;
    }

    private static function highestSalaryName() : array
    {
        return [(User::orderBy('salary', 'DESC')->first())->name];
    }

    private static function getTotalTransactionsAmountLowerThan(): array
    {
        return [ Transaction::where('amount', '<', 1790)->sum('amount')];
    }

    private static function getTransactionsGroupedByPaymentMethod() : array
    {
        return Transaction::all()->groupBy('payment_method_id')->toArray();
    }

    private static function getTransactionsByUserExpenses() : array
    {
        $data = [];
        $users = User::with('movements.transaction')->get();
        foreach ($users as $user) {
            $data[] = [
                'user_id' => $user->id,
                'expenses' => $user->movements->pluck('transaction')->sum('amount')
            ];
        }
        usort($data, function($a, $b) {
           if($a['expenses'] > $b['expenses']) {
               return 1;
           } elseif ($a['expenses'] < $b['expenses']) {
               return -1;
           }
           return 0;
        });
        return $data;
    }

    private static function getTransactionsByUserCount() : array
    {
        $data = [];
        $users = User::with('movements.transaction')->get();
        foreach ($users as $user) {
            $data[] = [
                'user_id' => $user->id,
                'count' => $user->movements->count()
            ];
        }
        usort($data, function($a, $b) {
            if($a['count'] > $b['count']) {
                return 1;
            } elseif ($a['count'] < $b['count']) {
                return -1;
            }
            return 0;
        });
        return $data;
    }

    private static function getMovementsByUser() : array
    {
        $data = [];
        $users = User::with('movements.transaction')->get();
        foreach ($users as $user) {
            $data[] = [
                'user_id' => $user->id,
                'movements' => $user->movements->pluck('transaction')->sortBy('amount')
            ];
        }
        return $data;
    }

    private static function getUnusedPaymentMethods() :array
    {
        $data = [];
        foreach (PaymentMethod::all() as $payment_method) {
            if($payment_method->transactions()->count() == 0 ) {
                $data[] = $payment_method;
            }
        }
        return $data;
    }

    private static function getTotalTransactionsByRegion() : array
    {
        $data = [];
        $movements = Movement::with(['transaction'])->get()->groupBy('region');
        foreach ($movements as $key => $value) {
            $data[$key] = [
                'total' => $value->pluck('transaction')->sum('amount')
            ];
        }
        return $data;
    }
}
