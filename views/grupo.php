
<h1><?php echo $info['titulo']; ?></h1>
<?php if($is_membro): ?>

Você é membro desse grupo!

<?php else: ?>
 
<h3>Você não é membro deste grupo.</h3>
<a href="<?php echo BASE; ?>grupos/entrar/<?php echo $id_grupo; ?>" class="btn btn-default">Entrar no Grupo</a>
<?php endif; ?>