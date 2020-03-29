<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     CLAN SOFTWARE <Victor Luis dos Santos>
 * @copyright  2019-2020 The Clan
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: 0.3RTM
 * @link       http://api.pesquisatudo.com.br
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
*/
require('vendor/autoload.php');
use \Firebase\JWT\JWT;

class Pesquisatudo {

	public static $jwt = null;
	public static $token = null;
	public static $wsdl = 'http://api.pesquisatudo.com.br:5001/';

	function __construct($jwt, $token, $debug=False) {
		self::$jwt = $jwt;
		self::$token = $token;

		if($debug)
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
	}

	/**
	 * @see 
	 * @param [STRING] $cpf, size 14, with mask, example: 333.149.078-42
	 * @param [DATE] $datanascimento, size 10, Example: 1991-01-10
	 * @param [STRING] $uf, size 2, example: PR
	 * @see
	*/
	public function getInformations($cpf=null, $datanascimento=null, $uf=null) {
		$data = array('token' => self::$token);
		
		if(empty($cpf))
			return False;
		else
			$data['cpf'] = str_replace(array('.','-',' '), '', $cpf);

		if(!empty($datanascimento))
			$data['datanascimento'] = $datanascimento;

		if(!empty($uf))
			$data['uf'] = strtoupper($uf);

		$jwtCode = JWT::encode($data, self::$jwt);
		
		return array(
						'url' => self::$wsdl.'deepsearch?jwt='.$jwtCode,
						'cpf' => $data['cpf'],
						'datanascimento' => $datanascimento,
						'uf' => $uf,
						'jwt' => $jwtCode,
						'return' => $this->getJWTCodeCurl($jwtCode)
					);
	}

	/**
	 * @see 
	 * @param [STRING] $jwtCode
	*/
	private function getJWTCode($jwtCode=null) {
		if(empty($jwtCode) || is_null($jwtCode))
			return False;
		return file_get_contents(self::$wsdl.'deepsearch?jwt='.$jwtCode);
	}

	/**
	 * @see 
	 * @param [STRING] $jwtCode
	 * @author Issamu Joao
	*/
	private function getJWTCodeCurl($jwtCode=null) {
		if(empty($jwtCode) || is_null($jwtCode))
			return false;

		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, self::$wsdl.'deepsearch?jwt='.$jwtCode );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$response = curl_exec( $ch );
		return $response;
	}
}
$pesquisa = new Pesquisatudo($_GET['jwt'], $_GET['token']);
$dados = $pesquisa->getInformations($_GET['cpf'], $_GET['datanascimento'], $_GET['uf']);
die($dados['return']);