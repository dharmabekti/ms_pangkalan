<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['auth', 'numberformat', 'dateformat', 'terbilang'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    protected $validation;
    protected $session, $webID;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        session();
        $this->session = \Config\Services::session();
        $this->session->start();

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    protected function outputJson($status, $pesan)
    {
        $flag = false;
        $title = "Gagal";
        if ($status == "success") {
            $flag = true;
            $title = "Berhasil";
        } elseif ($status == "warning") {
            $flag = false;
            $title = "Peringatan";
        } elseif ($status == "error") {
            $flag = false;
            $title = "Gagal";
        }

        $output['status'] = $flag;
        $output['title'] = $title;
        $output['type'] = $status;
        $output['message'] = $pesan;
        echo json_encode($output);
    }

    protected function getRandomChar($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ?!.,';
        $result = '';
        for ($i = 0; $i < 8; $i++) {
            $result .= $characters[mt_rand(0, 40)];
        }
        return $result;
    }

    protected function getColumnExcel()
    {
        return ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ'];
    }
}
