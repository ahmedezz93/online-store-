<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait Messages
{

    /**
     * @param Request $request
     * @return $this|false|string
     *
     *
     *
     */


     public function createdMessage($defaultMessage='Created Successfully'){

      return   noty()->addSuccess($defaultMessage);
    }


    public function UpdatedMessage($defaultMessage='Updated Successfully'){

        return   noty()->addSuccess($defaultMessage);
      }


      public function deletedMessage($defaultMessage='Deleted Successfully'){

        return   noty()->addError($defaultMessage);
      }


}
