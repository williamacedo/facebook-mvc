<div class="row">
    <div class="col-sm-8">
        <div>
            <form method="post" enctype="multipart/form-data">
                <h4>O que voce está pensando ?</h4>
                <textarea name="post" style="height: 100px" class="form-control"></textarea>
                <input type="file" name="foto"><br/>
                <input type="submit" value="Enviar" class="btn btn-defalut" style="margin-top: 5px;">
                <hr/>
            </form>
        </div>
        <div class="feed">
            <?php foreach($feed as $postitem) {
                $this->loadView('postitem', $postitem);
            } 
            ?>
        </div>
    </div>
    <div class="col-sm-4">
        <?php if(count($requisicoes) > 0): ?>
        <div class="widget">
            <h4>Requisições de amizade</h4>
            <?php foreach($requisicoes as $pessoa): ?>
            <div class="sugestaoitem">
                <strong><?php echo $pessoa['nome']; ?></strong>
                <button type="button" class="btn btn-default pull-right" onclick="aceitarFriend('<?php echo $pessoa['id']; ?>', this)">+</button>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="widget">
            <?php if(count($sugestoes) > 0): ?>
            <h4>Sugestões de amigos</h4>
            <?php foreach($sugestoes as $pessoa): ?>
                <div class="sugestaoitem">
                <strong><?php echo $pessoa['nome']; ?></strong>
                <button type="button" class="btn btn-default pull-right" onclick="addFriend('<?php echo $pessoa['id']; ?>', this)">+</button>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <div class="widget">
            <h4>Total de Amigos</h4>
            <?php echo $totalamigos; ?> amigo<?php echo ($totalamigos == '1')?'':'s'; ?>
                </div>
        </div>
        <div class="widget">
            <h4>Grupos</h4>
            <form method="post">
                <div class="input-group">
                    <input type="text" name="grupo" class="form-control" placeholder="Nome do Grupo">
                    <span class="input-group-btn">
                        <input type="submit" value="Criar" class="btn btn-default">
                    </span>
                </div>
            </form>
            <?php foreach($grupos as $grupo): ?>
            <a href="<?php echo BASE; ?>grupos/abrir/<?php echo $grupo['id']; ?>"><?php echo $grupo['titulo']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
