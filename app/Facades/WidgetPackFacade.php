<?php

namespace App\Facades;

class WidgetPackFacade
{
    private $result;  //    here we will save the result
    private $total_amount = 0;  //    will be 0 in the starting
    private $remaining;
    private $packs = array();

    public function calculate($packs, $amount)
    {
        $this->remaining = $amount;  //  to check for the remaining amount.
        $this->packs = $packs;

        $iterations = count($packs) - 1;   //  to loop through each node using the pack size.
        for ($index = $iterations; $index >= 0; $index--)
        {
            if ($this->remaining - $this->total_amount >= $packs[$index])
            {
                $this->check_items($packs, $index, $amount);
            }
            else {
                if ($this->remaining - $packs[$index] <= 0)
                {
                    if ($this->remaining - $packs[$index] < $packs[0] && $this->remaining - $packs[$index] > $packs[0] - ($packs[0] * 2)){
                        $this->total_amount = $this->total_amount + $packs[$index];
                        $this->remaining = $this->remaining - $packs[$index];
                        $this->result[$index] = [
                            'pack' => $packs[$index],
                            'count' => 1,
                        ];
                    }
                }
                else
                {
                    $this->check_items($packs, $index, $amount);
                }
            }
        }
//        dd($this->result);
        return [
            'data' => $this->result
        ];
    }
    public function check_items($packs, $index, $amount){
        $this->total_amount = $this->total_amount + $packs[$index];
        $no_of_packs_to_be_sent = 1;
        while($this->total_amount < $amount){
            if ($this->total_amount + $packs[$index] <= $amount || $this->total_amount + $packs[$index] - $amount < $packs[0]){
                $this->total_amount = $this->total_amount + $packs[$index];
                $no_of_packs_to_be_sent++;
            }
            else {
                break;
            }
        }
        $packs_details = $packs[$index] * $no_of_packs_to_be_sent;
        $this->remaining = $this->remaining - $packs_details;
        $this->result[$index] = [
            'pack' => $packs[$index],
            'count' => $no_of_packs_to_be_sent,
        ];
    }
}
