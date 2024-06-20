<section class="contact-form">
    <h3>Связаться с нами</h3>
    <div class="right">
        <form action="#">
            <p>Наши сотрудники помогут вам подобрать оборудование и&nbsp;цены в&nbsp;соответствии с&nbsp;вашими требованиями</p>        
            <div class="form-group required">
                <label for="name">ФИО</label>
                <input type="text" id="name" name="name" placeholder="Введите имя" required>
            </div>
            <div class="form-group required">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="phone" placeholder="Введите телефон" required>
            </div>
            <div class="form-group required">
                <label for="email">Почта</label>
                <input type="email" id="email" name="email" placeholder="Введите почту" required>
            </div>
            <div class="form-group">
                <textarea id="comment" name="comment" placeholder="Введите комментарий"></textarea>
            </div>
            <div class="form-group">
                <p class="hint">Нажимая &laquo;Отправить&raquo;, вы&nbsp;подтверждаете, что ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласие на&nbsp;обработку персональных данных&raquo;.</p>            
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</section>

<div class="result-message" style="display: none;">
    <img id="result-image" src="" alt="Result" style="display: none;">
    <br>
    <button class="reload-button" style="display: none;">Перезагрузить</button>
</div>


<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Убедимся, что все необходимые поля заполнены
    $requiredFields = ['name', 'phone', 'email'];
    $missingFields = [];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $missingFields[] = $field;
        }
    }

    if (!empty($missingFields)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing fields: ' . implode(', ', $missingFields)]);
        exit;
    }

    // Данные из формы
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '';

    // Запись данных в файл
    $data = "Name: $name\nPhone: $phone\nEmail: $email\nComment: $comment\n\n";
    $file = 'form_data.txt';

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>



<script src="js/button.js"></script>


