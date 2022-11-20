<?php require "../php/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Tours Admin</title>
</head>
<body>
    <aside>
        <button class="tours-btn btn" id="tours">Туры</button>
        <button class="slider-btn btn" id="slider">Слайдер</button>
        <button class="requests-btn btn" id="requests">Заявки</button>
    </aside>
    <div class="content">
        <section class="tours-body" style="display: block;">
            <h2 class="section-title">
                Добавить тур
            </h2>
            <form action="../php/upload-tour.php" method="post" class="tours-form" enctype="multipart/form-data">
                <label>
                    Название:
                    <input type="text" name="title" required>
                </label>
                <label>
                    Описание:
                    <textarea name="description" required></textarea>
                </label>
                <label>
                    Цена <span>руб.</span>:
                    <input type="number" name="price" required>
                </label>
                <label>
                    Выберите изображение:
                    <input type="file" name="image">
                </label>
                <input type="submit" class="submit" value="Добавить" required>
            </form>
            <table border="1">
                <thead>Все туры:</thead>
                <tr>
                    <th class="title">Название</th>
                    <th class="description">Описание</th>
                    <th class="image">Изображение</th>
                    <th class="price">Цена</th>
                    <th class="delete">Удалить</th>
                </tr>
                <?
                $tours_query = mysqli_query($con, "SELECT * FROM `tours`");
                if (mysqli_num_rows($tours_query)){
                    while ($tours = mysqli_fetch_assoc($tours_query)){
                ?>
                <tr>
                    <td class="title"><?=$tours['tours_title']?></td>
                    <td class="description"><?=$tours['tours_description']?></td>
                    <td class="image"><img src="../images/tours/<?=$tours['tours_image']?>" alt=""></td>
                    <td class="price"><?=$tours['tours_price']?> руб.</td>
                    <td class="delete"><a href="../php/delete.php?id=<?=$tours['tours_id']?>">Удалить</a></td>
                </tr>
                <?}}?>
            </table>
        </section>
        <section class="slider-body">
            <h2>Туры в слайдере:</h2>
            <form action="../php/slider.php" method="get">
                <?php
                    $tours_query = mysqli_query($con, "SELECT * FROM `tours`");
                        if (mysqli_num_rows($tours_query)){
                        while ($tours = mysqli_fetch_assoc($tours_query)){?>
                            <label>
                                <? if ($tours['tours_slider']) {?>
                                    <input type="checkbox" name="tours[]" value="<?=$tours['tours_id']?>" checked>
                                <?}else{?>
                                    <input type="checkbox" name="tours[]" value="<?=$tours['tours_id']?>">
                                <?}?>
                                <h3><?=$tours['tours_title']?></h3>
                                <img src="../images/tours/<?=$tours['tours_image']?>" alt="">
                                <p><?=$tours['tours_description']?></p>
                                <p>Цена: <span><?=$tours['tours_price']?></span> руб.</p>
                            </label>
                <?}}?>
                <input type="submit" value="Обновить" class="submit">
            </form>
        </section>
        <section class="requests-body">requests</section>
    </div>

    <script src="../js/admin.js"></script>
</body>
</html>