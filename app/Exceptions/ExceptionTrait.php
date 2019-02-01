<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait{

	public function apiException($request , $e)
	{


		 if ($this->isModel($e)) {

            return $this->modelRes($e);
        }

		        if ($this->isHttp($e)) {

		            return $this->httpRes($e);
		        }

		        	return parent::render($request, $e);

	}

	public function isModel($e)
	{
		return $e instanceof ModelNotFoundException;
	}

	public function isHttp($e)
	{
		return $e instanceof NotFoundHttpException;
	}

	public function modelRes($e)
	{
		  return response()->json([
            	'errors' => 'Product Model not found'
            ],404);
	}

	public function httpRes($e)
	{
		 return response()->json([
		            	'errors' => 'Incorect route'
		            ],404);
	}


}

