<?php
/** * 
 * Classe que cria um medico com valores recebidos de pessoa
 * @author ThomasMuller
 * @version 1.0 
 * @copyright GeeG © 2022, Thomas Muller
 * @access public  
 */
class Medico extends Pessoa{
    public $crm;

    /** * setar CRM
     * @access public 
     * @param String
     */
    public function setCrm($crm)
    {
        $this->crm = $crm;
        return $this->crm;
    }
    /** * dar get em CRM
     * @access public
     */
    public function getCrm()
    {
        return $this->crm;
    }


}