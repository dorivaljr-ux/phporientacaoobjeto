<?php
/** * 
 * Classe que cria uma engenheiro com valores recebidos de pessoa
 * @author ThomasMuller
 * @version 1.0 
 * @copyright GeeG © 2022, Thomas Muller 
 * @access public  
 */
class Engenheiro extends Pessoa
{
    public $crea;
    /** * setar CREA
     * @access public 
     * @param String
     * @return String
     */
    public function setCrea($crea)
    {
        $this->crea = $crea;
        return $this->crea;
    }
    /** * dar get em CREA
     * @access public 
     * @return String
     */
    public function getCrea()
    {
        return $this->crea;
    }
}