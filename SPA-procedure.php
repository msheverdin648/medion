<? include "templates/header.php" ?>


<?php 
        require_once 'include/db.php';
?>

<?php 
        $procedure_id = (int)$_GET['id'];

        function get_spaProcedure($link, $procedure_id){
            $sql = "SELECT *
            FROM spa_procedure WHERE `spa_procedure`.`id_spa-procedure` LIKE $procedure_id ";
            $result = mysqli_query($link, $sql);
            $categoriyes = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $categoriyes;
        };
        $procedure = get_spaProcedure($link, $procedure_id)[0];
?>
<!-- Блок с основным контентом страницы -->
<div class="page">


      <!-- Блок с поиском -->
      <div class="search">
                <div class="container">
                        <form action="" class="search__search">
                                <input  autocomplete="off" id="q" name="q" type="text" class="search__input" placeholder="Что-то ищете? Воспользуйтесь поиском по сайту...">
                                <input type="submit" class="search__button" value="Поиск">
                        </form>
                        <ul class="search__list" id="search_list">

                        </ul>
                        <ul class="search__navigation">
                                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                                <li class="search__navigation_item" style="
border-right: 1px solid #ADBAC9;"><a href="/SPA.php">СПА комплекс</a></li>
                                <li class="search__navigation_item"><?=$procedure['name_spa-procedure']?></li>   
                        </ul>
                        <h2 class="search__header">
                        <?=$procedure['name_spa-procedure']?>
                        </h2>
                </div>
        </div>
        <!-- конец блока -->
      
        







<!-- КОнец блока -->

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>


INSERT INTO `doctors` (`name_doctor`, `post_doctor`, `experience_doctor`, `id_doctors-category`) 

VALUES
        ('Маджидова Ирода Нуруллаевна', 'Неотолог' ,' ', 4),
        ('Мустафина Елена Рафиковна	', 'Педиатр' ,' ', 5),
        ('Салихова Галия Саидовна', 'Педиатр', ' ', 5),
        ('Шайзаков Алишер Нуруллаевич', 'Невролог-невропатолог' ,' ', 6),
        ('Назарова Адиба Газиевна', 'Невролог', '37 лет ', 6),
        ('Раупова Севара Амановна', 'Невролог детский', ' ', 6),
        ('Рафикова Земфира Барсовна', 'Невролог детский' ,' ', 6),
        ('Мухиддинова Мукаддас Араббаевна', 'Невролог', ' 8 лет', 6),
        ('Тухтаева Нигора Шакировна', 'Невролог ЭЭГ', ' 26 лет', 6),
        ('Убайдуллаева Саодат Фатхуллаевна', 'Нейрофизиолог' ,' ', 7),
        ('Абдурахманова Наима Абдураззаковна', 'Кардиолог' ,' ', 8),
        ('Узбекова Наилья Камильевна', 'Кардиолог', '18 лет', 8),
        ('Ким Дмитрий Ильич', 'Эндоскопист' ,' ', 9),
        ('Мирзаева Гульнора Шухратовна', 'Эндоскопист', ' ', 9),
        ('Мухаммедкаримов Алишер Кабилджанович', 'Эндоскопист' ' ', 9),
        ('Турсунова Дилором Мирсобитовна', 'Аллерголог - терапевт' ,' ', 10),
        ('Даминов Рустам Уткурович', 'Пульманолог', ' ', 11),
        ('Абдумажидов Алишер Абдулхайрович', 'Уролог', ' 19 лет', 12),
        ('Раззакова Наргиза Пулатовна', 'Маммолог', ' ', 13),
        ('Сутланова Зиёда Муталовна', 'Окулист', ' ', 14),
        ('Шамирзаев Хаким Иркинович', 'Зав. Отделением радиологии', '22 года ', 15),
        ('Маткурбанов Бахтиер Джуманазарович', 'Радиолог', ' ', 15),
        ('Сабиров Бурхон Фархатович', 'Лаборант', ' ', 15),
        ('Рузматов Сирожиддин Бахтиер угли', 'Лаборант', ' ', 15),
        ('Аъзамова Дилафруз Зокиржон кизи', 'Лаборант', ' ', 15),
        ('Халматова Барно Дамин кизи', 'Лаборант', ' ', 15),
        ('Хабибрахманова Гузаль Равкатовна', 'Лаборант', ' ', 15),
        ('Батманов Артем Леонидович', 'Заведущий отделением реанимации и анестезиологии', ' ', 16),
        ('Азимова Юлия Владимировна', 'Анестезиолог-реаниматолог', ' 18 лет', 16),
        ('Мукинова Кристина Валерьевна', 'Анестезиолог-реаниматолог', '6 лет ', 16),
        ('Юсупова Оксана Евгеньевна', 'Анестезиолог-реаниматолог', ' ', 16),
        ('Закиров Рустам Рухуллаевич', 'Зав. Отделения ДЭМ', ' ', 17),
        ('Акилова Наргиза Фархадовна', 'Дерматолог- косметолог', ' ', 17),
        ('Нурматова Ирода Бахтияровна', 'Дерматолог- косметолог', ' ', 17),
        ('Сердюкова Ольга Анатольевна', 'Дерматолог- косметолог', '26 лет ', 17),
        ('Тапия Владимир Фернандес', 'Пластический хирург', ' ', 18),
        ('Камалов Султонхужа Таваккалхужаевич', 'Пластический хирург', '6 лет ', 18),
        ('Исламов Темур Тельманович', 'Пластический хирург', ' ', 18),
        ('Оганесян Вадим Романович', 'Пластический хирург', ' ', 18),
        ('Курбанова Олеся Анатольевна', 'Диетолог', ' ', 19),
        ('Шарахмедов Шорахмат Шарасулович', 'Трихолог', ' 12 лет', 20),
        ('Шамсиддинова Наргиза Алихановна', 'Гинеколог', ' ', 21),
        ('Акбаров Дониер Дильшодович', 'Зав. отд. стоматологии', ' 12 лет', 22),
        ('Абдурасулова Севара Теминдаровна', 'Стоматолог-терапевт', ' ', 22),
        ('Ахмедов Даврон Анвар угли', 'Стоматолог-терапевт', '18 лет ', 22),
        ('Махмудов Муроджон Хикматович', 'Стоматолог-терапевт', ' ', 22),
        ('Туракулова Машхура Шоназаровна', 'Мед. Сестра стоматологии', ' ', 23),
        ('Мухамедова Гульрух Фарихджанова', 'Мед. Сестра ', ' ', 23),
        ('Холматова Донохон Худойбердиевна', 'Мед. Сестра ', ' ', 23);

        
       
