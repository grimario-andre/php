<?php
Class Produto{
    public int $Codigo;
    public string $Descricao;
    public float $Preco;
    public int $Quantidade;

    #função impreme etiqueta.
    public function ImpremeEtiqueta()
    {
        print 'Código: '.$this->Codigo."\n";
        print 'Descrição'.$this->Descricao."\n"; 
    }
}
?>