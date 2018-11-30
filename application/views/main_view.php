
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xl-12"></div>
</br>
<!--Добавлям задачу-->

        <div class="form-group">
            <label class="sr-only">Добавить задачу</label>
            <input type="text" class="form-control form-control-lg" name="insertlist" id="actlist" placeholder="Добавить задачу"/>
        </div>
        <input type="submit" name="ins" id="ins" class="btn btn-primary" value="Добавить"/>


   <h3 class="text-center">Лист задач</h3>
    <!--Выводим задачи-->
    <table class="table text-center table-hover">
        <thead>
            <tr>
                <td>№</td>
                <td>Задание</td>
                <td>Действие</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($data as $row)
            {
                echo '<tr>
                        <td>'.$row['ID'].'</td>
                        <td>'.$row['Name'].'</td>
                        <td>
                            <a class="btn btn-primary" href="?red_id='.$row['ID'].'">Изменить</a> 
                            <a class="btn btn-danger" href="main?del_id='.$row['ID'].'">Удалить</a>
                        </td>
                      </tr>';
            }
            ?>
        </tbody>
    </table>
<div class="col-lg-3 col-md-3"></div>
</div>
</div>
