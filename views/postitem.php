<div class="postitem">
    <?php if($tipo == 'foto'): ?>
    <img width="100px" border="0" src="<?php echo BASE; ?>/assets/images/posts/<?php echo $url; ?>">
    <?php endif; ?>
    <div class="postitem_texto">
    <?php echo $texto; ?>
    </div>
    <div class="postitem_info">
        <strong>Post de:</strong> <?php echo $nome ?>
    </div>
    <div class="postitem_botoes">
        <button class="btn btn-default" onclick="curtir(this)" data-id="<?php echo $id; ?>" data-likes="<?php echo $likes; ?>" data-liked="<?php echo $liked; ?>">(<?php echo $likes; ?>) <?php echo ($liked =='0')?'Curtir':'Descurtir'; ?></button><button class="btn btn-default" onclick="displayComentario(this)">Comentar</button>
        <div class="postitem_comentario">
            <br/><br/>
            <input type="text" class="postitem_txt form-control"><br/>
            <button class="btn btn-default" data-id="<?php echo $id; ?>" onclick="comentar(this)">Enviar</button>
        </div>
    </div>
</div>