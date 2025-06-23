<?php declare(strict_types=1);

use Slim\App;

if (!function_exists('renderBodyMail')) {
    function renderBodyMail($nome, $email, $assunto, $mensagem)
    {
        return '
            <div style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; border-radius: 10px; max-width: 600px; margin: auto;">
                <div style="background-color: #1a1a1a; padding: 15px; border-radius: 10px 10px 0 0; color: #ffffff;">
                    <h2 style="margin: 0; font-size: 24px;">* Nova Mensagem de Contato</h2>
                </div>
                <div style="background-color: #ffffff; padding: 20px; border-radius: 0 0 10px 10px;">
                    <p style="margin: 0 0 10px;"><strong>* Nome:</strong> ' . $nome . '</p>
                    <p style="margin: 0 0 10px;"><strong>* E-mail:</strong> <a href="mailto:' . $email . '" style="color: #1a73e8; text-decoration: none;">' . $email . '</a></p>
                    <p style="margin: 0 0 10px;"><strong>* Assunto:</strong> ' . $assunto . '</p>
                    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">
                    <p style="margin: 0 0 10px;"><strong>* Mensagem:</strong></p>
                    <p style="background-color: #f1f1f1; padding: 15px; border-radius: 5px; font-style: italic; color: #333;">' . nl2br($mensagem) . '</p>
                </div>
                <p style="text-align: center; color: #888; font-size: 12px; margin-top: 20px;">Esta mensagem foi enviada pelo formulário de contato do site Spider Soft</p>
            </div>
        ';
    }
}

if (!function_exists('renderSubjectMail')) {
    function renderSubjectMail($assunto)
    {
        return 'Contato do site: ' . $assunto;
    }
}

if (!function_exists('renderAltBodyMail')) {
    function renderAltBodyMail($nome, $email, $assunto, $mensagem)
    {
        return 'Nova mensagem de contato ' . '<br>' . 'Nome: ' . $nome . '<br>' . 'E-mail: ' . $email . '<br>' . 'Assunto: ' . $assunto . '<br>' . 'Mensagem: ' . $mensagem;
    }
}

if (!function_exists('config')) {
    function config($key)
    {
        static $settings;
        $configs_path = __DIR__ . '/../config/';

        if (!$settings) {
            $settings = [
                'mail' => require $configs_path . 'mail.php',
            ];
        }

        $keys = explode('.', $key);
        $value = $settings;

        foreach ($keys as $k) {
            $value = $value[$k] ?? null;
        }

        return $value;
    }
}

?>