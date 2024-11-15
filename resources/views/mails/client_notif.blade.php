<!DOCTYPE html>
<html>
<head>
    <title>Уведомление клиента</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
        <h2 style="text-align: center; color: #007BFF;">Здравствуйте, {{ $details['name'] }}!</h2>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Сообщение:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['message'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Имя:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Статус:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['status'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Специализация:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['specialization'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Доктора:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['doctors'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Предпочитаемые слоты:</td>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $details['preferred_slots'] }}</td>
            </tr>
        </table>
        <p style="text-align: center; margin-top: 20px; font-size: 14px; color: #666;">Это письмо создано автоматически. Пожалуйста, не отвечайте на него.</p>
    </div>
</body>
</html>
