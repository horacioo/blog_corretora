<?php

global $wpdb;

class carro {

    public $total;
    private $id;
    private $query;
    public $sucesso;
    public $entrada;
    public $paginasInformacao;
    public $id_paginas_adm;

    public function __construct() {
        
        //echo $_SERVER['HTTP_REFERER'];
        
        $this->paginasInformacao = array(
            "ApiListaDeCarros",
            "Cadastradadoscarros",
            "apiModeloCarro",
            "ApiDeletaCarro",
            "ApiAtualizaDados",
            "Requisicoes"
        );
    }

    public function localiza_post($title = '') {
        global $wpdb;
        if (is_null($title)) {
            return;
        }
        $this->query = "SELECT ID ,count(id) as total FROM wp_posts WHERE post_title = '" . $title . "' and post_status='publish'  ";
        $resultado = $wpdb->get_row("SELECT ID ,count(id) as total FROM wp_posts WHERE post_title = '" . $title . "' and post_status='publish'  ", 'ARRAY_N');
        $this->total = $resultado[1];
        $this->id = $resultado[0];
        return $this;
    }

    public function SalvaCarro($dados) {
        if (!is_null($dados)):
            $modelo = $dados['modelo'];
            $ano = $dados['ano'];
            $marca = $dados['marca'];
            $descrição = $dados['descricao'];
            $this->CriaPagina($dados);
        endif;
    }

    private function CriaPagina($dados) {
        $this->localiza_post($dados['modelo']);
        if (is_null($this->id)):
            $pagina = array(
                "post_title" => $dados['modelo'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_content' => $dados['descricao']
            );
            $my_post_id = wp_insert_post($pagina);
            add_post_meta($my_post_id, 'ano', $dados['ano']);
            add_post_meta($my_post_id, 'marca', $dados['marca']);
            $this->sucesso = 1;
        else:
            $this->sucesso = 0;
        endif;
    }

    function ListaCarros() {
        $args = array(
            'post_type' => 'page',
            'post_status' => 'publish'
        );
        $pages = get_pages($args);
        $retorno = array();
        foreach ($pages as $p):
            $p = (array) $p;
            if (!in_array($p['post_title'], $this->paginasInformacao)):
                $titulo = $p['post_title'];
                $link = link_Pagina($p['post_title']);
                $id = $p["ID"];
                $info[] = array("link" => $link, "titulo" => $titulo, "id" => $id);
            endif;
        endforeach;
        $retorno = $info;
        return $retorno;
    }

    public function ModeloCarro() {
        if (!is_null($this->id_paginas_adm)):
            $x = get_post($this->id_paginas_adm);
            $y = get_post_meta($this->id_paginas_adm);
            return array(
                "modelo" => $x->post_title,
                "descricao" => $x->post_content,
                "marca" => $this->LegendaMontadora($y['marca'][0]),
                "marcaInt" => $y['marca'][0],
                "ano" => $y['ano'][0]
            );

        endif;
    }

    private function LegendaMontadora($montadora = "") {
        switch ($montadora):
            case 1:return "ford";
            case 2:return "gm";
            case 3:return "volks";
            case 4:return "chevrolet";
            default :return"indefinida";
        endswitch;
    }

    public function AtualizaDados() {
        $id = $this->id_paginas_adm;
        $x = wp_update_post($postarr);
        $y = update_post_meta($post_id, $meta_key, $x);
    }

    public function AtualizaDadosCarro($dados) {
        $x = $this->RecriaArray($dados);
        $postarr = array(
            "ID"=>$x['carro_escolhido'],
            "post_title" => $x['modelo'],
            'post_content' => $x['descricao']
        );
        $this->id = wp_update_post($postarr);
        update_post_meta($this->id, "ano", $x['ano']);
        update_post_meta($this->id, "marca", $x['marca']);
        $this->sucesso=1;    
    }

    
    private function RecriaArray($dados) {
        $dados = explode("&", $dados);
        $x = array();
        foreach ($dados as $d):
            $d = explode("=", $d);
            $x[trim($d[0])] = $d[1];
        endforeach;
        return $x;
    }

}
