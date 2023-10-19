<?php
$json = file_get_contents('./resources/privateData/data.json');
$json_data = json_decode($json, true);
$links = $json_data['links'];

?>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Хохма-шоу</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a target="_blank" class="text-body-secondary" href="<?php echo $links['vk']; ?>">
                    <img alt="vk" src="../resources/images/VK.com-logo.svg" width="24" height="24">
                </a>
            </li>
            <li class="ms-3">
                <a target="_blank" class="text-body-secondary" href="<?php echo $links['watsApp']; ?>">
                    <img alt="watsApp" src="../resources/images/WhatsApp.svg" width="24" height="24"></a>
            </li>
            <li class="ms-3">
                <a target="_blank" class="text-body-secondary" href="<?php echo $links['telegram']; ?>">
                    <img alt src="../resources/images/Telegram_logo.svg" width="22" height="22"></a>
            </li>
        </ul>
    </footer>
</div>