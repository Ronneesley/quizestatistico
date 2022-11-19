<?php

namespace QuizEstatistico\controle;

/**
 * Controle para as funções integradas ao R
 * @author Ronneesley
 */
class CalculadoraControle extends ControleBase {
    public function processar($acao){
        switch ($acao){
            case "mostrar_frequencia_relativa":
                $this->mostrarFrequenciaRelativa();
                break;
            case "mostrar_calculo_media":
                $this->mostrarCalculadoraMedia();
                break;
            case "opcoes":
                $this->mostrarOpcoes();
                break;
        }        
    }
    
    public function mostrarCalculadoraMedia(){
        $layout = $this->configurarTemplate("layout.html");
        $this->mostrarPaginaLayout($layout, "calculadora/media.html");
    }
    
    public function mostrarFrequenciaRelativa(){
        $layout = $this->configurarTemplate("layout.html");
        $this->mostrarPaginaLayout($layout, "calculadora/frequencia_relativa.html");
    }
    
    public function mostrarOpcoes(){
        $layout = $this->configurarTemplate("layout.html");
        $this->mostrarPaginaLayout($layout, "calculadora/opcoes.html");
    }
}

?>