<?php

use OpenSRS\domains\transfer\TransferGetIn;
/**
 * @group transfer
 * @group TransferGetIn
 */
class TransferGetInTest extends PHPUnit_Framework_TestCase
{
    protected $func = 'transferGetIn';

    protected $validSubmission = array(
        "data" => array(
            /**
             * Optional
             *
             * domain: submit only if you
             *   want to check if a particular
             *   domain has been transferred
             *   away
             * limit: max number of domains to
             *   return per page. max 40
             * losing_registrar:: search according to
             *   losing registrar. accepts strings and
             *   wildcards (*)
             * completed_from: start date for the search
             * completed_to: end date for the search
             * order_id:: ID of the order
             * order_from:: start date from which to
             *   return orders
             * order_to: end date from which to return
             *   orders
             * owner_confirm_ip: IP address from
             *   which the owner confirmed or denied
             *   the transfer-in request
             * owner_confirm_from: search
             *   according to date from when
             *   the owner confirmed or denied
             *   the transfer
             * owner_confirm_to: search according
             *   to date prior to when owner
             *   confirmed or denied transfer
             * owner_request_from: search by date
             *   when email waas sent to requestor
             * owner_request_to: search according to
             *   when email was sent to request_address
             * page: determines which page to receive,
             *   page index starts at 0 (zero)
             * req_from: search according to date
             *   transfer notification was sent
             * req_to: search according to date up
             *   until transfer notification sent\
             * request_address: admin email at the
             *   time of notification. wildcards (*)
             *   accepted
             * status: search by status.
             *   allowed values:
             *     - pending_admin
             *     - pending_owner
             *     - pending_registry
             *     - completed
             *     - cancelled
             * transfer_id: ID of the transfer
             */
            "domain" => "",
            "gaining_registrar" => "",
            "limit" => "",
            "losing_registrar" => "",
            "completed_from" => "",
            "completed_to" => "",
            "order_id" => "",
            "order_to" => "",
            "order_from" => "",
            "owner_confirm_ip" => "",
            "owner_confirm_from" => "",
            "owner_confirm_to" => "",
            "owner_request_from" => "",
            "owner_request_to" => "",
            "page" => "",
            "req_from" => "",
            "req_to" => "",

            /**
             * Optional
             *
             * get_request_address: flag to
             *   request the registrant's
             *   contact email. useful if you
             *   want to make sure your client
             *   can receive mail at that address
             *   to acknowledge the tranfer
             *     allowed values: 0 or 1
             * check_status: flag to request
             *   status of a transfer request
             *     allowed values: 0 or 1
             */
            "reseller" => "",
            ),
        );

    /**
     * Valid submission should complete with no
     * exception thrown
     *
     * @return void
     *
     * @group validsubmission
     */
    public function testValidSubmission() {
        $data = json_decode( json_encode($this->validSubmission) );

        $ns = new TransferGetIn( 'array', $data );

        $this->assertTrue( $ns instanceof TransferGetIn );
    }

    // TransferGetIn currently has no required params,
    // so commenting out in the event it's required in
    // the future
    //
    // /**
    //  * Data Provider for Invalid Submission test
    //  */
    // function submissionFields() {
    //     return array(
            
    //         );
    // }

    // TransferGetIn currently has no required params,
    // so commenting out in the event it's required in
    // the future
    //
    // /**
    //  * Invalid submission should throw an exception
    //  *
    //  * @return void
    //  *
    //  * @dataProvider submissionFields
    //  * @group invalidsubmission
    //  */
    // public function testInvalidSubmissionFieldsMissing( $field, $parent = 'data', $message = null ) {
    //     $data = json_decode( json_encode($this->validSubmission) );

    //     if(is_null($message)){
    //       $this->setExpectedExceptionRegExp(
    //           'OpenSRS\Exception',
    //           "/$field.*not defined/"
    //           );
    //     }
    //     else {
    //       $this->setExpectedExceptionRegExp(
    //           'OpenSRS\Exception',
    //           "/$message/"
    //           );
    //     }



    //     // clear field being tested
    //     if(is_null($parent)){
    //         unset( $data->$field );
    //     }
    //     else{
    //         unset( $data->$parent->$field );
    //     }

    //     $ns = new TransferGetIn( 'array', $data );
    // }
}
