<?php

if (!class_exists("TissCancelaGuia", false)) 
{
include_once('cancelaGuiaWS.php');
include_once('cabecalhoTransacao.php');
include_once('identificacaoTransacao.php');
include_once('origem.php');
include_once('identificacaoPrestador.php');
include_once('destino.php');
include_once('ct_prestadorIdentificacao.php');
include_once('assinaturaDigital.php');
include_once('ct_loginSenha.php');
include_once('ct_guiaCancelamento.php');
include_once('ct_contratadoDados.php');
include_once('reciboCancelaGuiaWS.php');
include_once('ct_reciboCancelaGuia.php');
include_once('ct_motivoGlosa.php');
include_once('ct_guiaCancelamentoRecibo.php');
include_once('dadosGuia.php');
include_once('SignatureType.php');
include_once('SignedInfoType.php');
include_once('CanonicalizationMethodType.php');
include_once('SignatureMethodType.php');
include_once('ReferenceType.php');
include_once('TransformType.php');
include_once('DigestMethodType.php');
include_once('SignatureValueType.php');
include_once('KeyInfoType.php');
include_once('KeyValueType.php');
include_once('DSAKeyValueType.php');
include_once('RSAKeyValueType.php');
include_once('RetrievalMethodType.php');
include_once('X509DataType.php');
include_once('X509IssuerSerialType.php');
include_once('PGPDataType.php');
include_once('SPKIDataType.php');
include_once('ObjectType.php');


/**
 * <b><font size=4>WebService para consumo dos prestadores no padrão TISS</font></b>
 * 
 */
class TissCancelaGuia extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'cancelaGuiaWS' => '\\cancelaGuiaWS',
    'cabecalhoTransacao' => '\\cabecalhoTransacao',
    'identificacaoTransacao' => '\\identificacaoTransacao',
    'origem' => '\\origem',
    'identificacaoPrestador' => '\\identificacaoPrestador',
    'destino' => '\\destino',
    'ct_prestadorIdentificacao' => '\\ct_prestadorIdentificacao',
    'assinaturaDigital' => '\\assinaturaDigital',
    'ct_loginSenha' => '\\ct_loginSenha',
    'ct_guiaCancelamento' => '\\ct_guiaCancelamento',
    'ct_contratadoDados' => '\\ct_contratadoDados',
    'reciboCancelaGuiaWS' => '\\reciboCancelaGuiaWS',
    'ct_reciboCancelaGuia' => '\\ct_reciboCancelaGuia',
    'ct_motivoGlosa' => '\\ct_motivoGlosa',
    'ct_guiaCancelamentoRecibo' => '\\ct_guiaCancelamentoRecibo',
    'dadosGuia' => '\\dadosGuia',
    'SignatureType' => '\\SignatureType',
    'SignedInfoType' => '\\SignedInfoType',
    'CanonicalizationMethodType' => '\\CanonicalizationMethodType',
    'SignatureMethodType' => '\\SignatureMethodType',
    'ReferenceType' => '\\ReferenceType',
    'TransformType' => '\\TransformType',
    'DigestMethodType' => '\\DigestMethodType',
    'SignatureValueType' => '\\SignatureValueType',
    'KeyInfoType' => '\\KeyInfoType',
    'KeyValueType' => '\\KeyValueType',
    'DSAKeyValueType' => '\\DSAKeyValueType',
    'RSAKeyValueType' => '\\RSAKeyValueType',
    'RetrievalMethodType' => '\\RetrievalMethodType',
    'X509DataType' => '\\X509DataType',
    'X509IssuerSerialType' => '\\X509IssuerSerialType',
    'PGPDataType' => '\\PGPDataType',
    'SPKIDataType' => '\\SPKIDataType',
    'ObjectType' => '\\ObjectType');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'http://wstiss.qualysystem.com.br/V3_00_01/tissCancelaGuia.asmx?wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * Método extraído de interface dos wsdl (implementa-se o xsd tisswebservicesv3_00_01)
   * 
   * @param cancelaGuiaWS $cancelaGuiaWS
   * @access public
   * @return reciboCancelaGuiaWS
   */
  public function tissCancelaGuia_Operation(cancelaGuiaWS $cancelaGuiaWS)
  {
    return $this->__soapCall('tissCancelaGuia_Operation', array($cancelaGuiaWS));
  }

}

}
