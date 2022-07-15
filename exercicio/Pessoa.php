<?php
/** * 
 * Classe que cria uma pessoa
 * @author ThomasMuller
 * @version 1.0 
 * @copyright GeeG © 2022, Thomas Muller 
 * @access public  
 */


class Pessoa
{   /** * 
    * recebe nome. 
    * @access public 
    */
    public $nome;
    /** * 
    * recebe data de nascimento. 
    * @access public 
    */
    public $dataNascimento;
    /** * 
    * recebe CPF. 
    * @access public 
    */
    public $cpf;
    /** * 
    * recebe RG. 
    * @access public 
    */
    public $rg;

    /** * setar nome
     * @access public 
     * @param String
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this->nome;
    }

    /** * dar get em nome
     * @access public
     */
    public function getNome()
    {
        return $this->nome;
    }

    /** * setar dataNasc
     * @access public 
     * @param String
     * @return String
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this->dataNascimento;
    }

    /** * get em dataNascimento
     * @access public 
     * @return String
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    /** * setar CPF
     * @access public 
     * @param String
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this->cpf;
    }  
    /** * dar get em CPF
     * @access public 
     * @return String
     */  
    public function getCpf()
    {
        return $this->cpf;
    }
    /** * setar RG
     * @access public 
     * @param String
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this->rg;
    }
    /** * dar get em RG
     * @access public 
     * @return String
     */  
    public function getRg()
    {
        return $this->rg;
    }
    




}