<form action="" method="post" enctype="multipart/form-data">
    <b>ID do Item</b><input type="number" name="id" min="10000" value="10000">
    <b>Nome</b><input type="text" name="name" value="Item com Nome">
    <b>Descrição</b><input type="text" name="desc" value="Teste de uma frase">

    <?php include("abc/folder.html") ?>
    <b>Icon do Item</b><input type="file" name="icon">
    <b>PNG do Item</b><input type="file" name="png">
    <b>Preço em Ouro</b><input type="number" name="price" placeholder="Gold">
    <b>Preço em Tokens</b><input type="number" name="token" placeholder="Token">
    <input type="submit" name="cadeira">
</form>