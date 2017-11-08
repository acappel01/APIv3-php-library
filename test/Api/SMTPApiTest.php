<?php
/**
 * SMTPApiTest
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace SendinBlue\Client;

use \SendinBlue\Client\Configuration;
use \SendinBlue\Client\ApiClient;
use \SendinBlue\Client\ApiException;
use \SendinBlue\Client\ObjectSerializer;

/**
 * SMTPApiTest Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SMTPApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createSmtpTemplate
     *
     * Create an smtp template.
     *
     */
    public function testCreateSmtpTemplate()
    {
    }

    /**
     * Test case for deleteHardbounces
     *
     * Delete hardbounces.
     *
     */
    public function testDeleteHardbounces()
    {
    }

    /**
     * Test case for deleteSmtpTemplate
     *
     * Delete an inactive smtp template.
     *
     */
    public function testDeleteSmtpTemplate()
    {
    }

    /**
     * Test case for getAggregatedSmtpReport
     *
     * Get your SMTP activity aggregated over a period of time.
     *
     */
    public function testGetAggregatedSmtpReport()
    {
    }

    /**
     * Test case for getEmailEventReport
     *
     * Get all your SMTP activity (unaggregated events).
     *
     */
    public function testGetEmailEventReport()
    {
    }

    /**
     * Test case for getSmtpReport
     *
     * Get your SMTP activity aggregated per day.
     *
     */
    public function testGetSmtpReport()
    {
    }

    /**
     * Test case for getSmtpTemplate
     *
     * Returns the template informations.
     *
     */
    public function testGetSmtpTemplate()
    {
    }

    /**
     * Test case for getSmtpTemplates
     *
     * Get the list of SMTP templates.
     *
     */
    public function testGetSmtpTemplates()
    {
    }

    /**
     * Test case for sendTemplate
     *
     * Send a template.
     *
     */
    public function testSendTemplate()
    {
    }

    /**
     * Test case for sendTestTemplate
     *
     * Send a template to your test list.
     *
     */
    public function testSendTestTemplate()
    {
    }

    /**
     * Test case for sendTransacEmail
     *
     * Send a transactional email.
     *
     */
    public function testSendTransacEmail()
    {
    }

    /**
     * Test case for updateSmtpTemplate
     *
     * Updates an smtp templates.
     *
     */
    public function testUpdateSmtpTemplate()
    {
    }
}
