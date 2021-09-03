<?php

namespace App\Traits;

trait SaveFile
{
    public function saveFile($request)
    {
        $save = null;

        if($request->hasFile('imagemUpload')){
            $imagem = $request->file('imagemUpload');
            $num = rand(1111, 9999);
            $dir ="img/servicos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $save = $dir . $nomeImagem;
        }
        
        return $save;
    }
}