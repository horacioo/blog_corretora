<?php
$x = $_GET['id'];
$post = get_post($x);
$title = $post->post_title;
$descricao = $post->post_content;
/* * ********* */
$x = $y = get_post_meta($x);
/* * ********* */
?>

<form >
    <p><label>titulo</label><input type="text" name="titulo" value="<?php echo $post->post_title; ?>"></p>
    <p><label>descrição</label><textarea><?php echo $post->post_content; ?></textarea></p>
    <p><label>ano</label><input type="number" name="titulo" value="<?php echo $x['ano'][0] ?>"></p>
    <p><label>Marca</label>
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </p>
    <input type="submit" value="Editar">
</form>