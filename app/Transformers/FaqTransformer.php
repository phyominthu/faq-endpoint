<?php namespace App\Transformers;

/**
* Transformer class for the Faq API Application.
*
* @package Faq Endpoint
* @license
* @author Thet Paing Oo <thetpaing@hexcores.com>
*/
class FaqTransformer extends AbstractTransformer{

	public function transform($faq)
    {
    	return [
    		'question' => $faq['question'],
    		'answer' => $faq['answer'],
    		'type' => config('app.type.'.$faq['question_type']),
    		'basis' => $faq['official_basis'],
    		'sections'	=> $faq['sections'],
            'url'       => $faq['url'],
    	];
    }
	
}