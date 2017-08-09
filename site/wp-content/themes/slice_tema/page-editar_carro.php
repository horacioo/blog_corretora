<?php

$x = $_GET['id'];


$post = get_post($x);
$title = $post->post_title;
$descricao = $post->post_content;
/* * ********* */

$x = $y = get_post_meta($x);
echo "<p>ano: ";
print_r($x['ano'][0]);
echo "<p>marca: ";
print_r($x['marca'][0]);

/* * ********* */
?>

<form >
    <p><label>titulo</label><input type="text" name="titulo" value="<?php echo $post->post_title; ?>"></p>
    <p><label>descrição</label><textarea><?php echo $post->post_content; ?></textarea></p>
    <p><label>ano</label><input type="number" name="titulo" value="<?php echo $x['ano'][0] ?>"></p>
    <p><label>Marca</label>
        <select>
            <option value="1">reitioert</option>
            <option value="2">reitioert</option>
            <option value="3">reitioert</option>
            <option value="4">reitioert</option>
        </select>
    </p>
</form>