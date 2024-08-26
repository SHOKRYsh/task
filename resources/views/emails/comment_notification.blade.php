<!DOCTYPE html>
<html>
<head>
    <title>New Comment Notification</title>
</head>
<body>
    <h1>New Comment on Your Post</h1>
    <p>Hi,</p>
    <p>A new comment has been added to your post "{{ $postTitle }}".</p>
    <p><strong>Comment:</strong> {{ $commentContent }}</p>
    <p><strong>Commenter:</strong> {{ $commenterName }}</p>
    <p>Best regards,</p>
    <p>The Blog Team</p>
</body>
</html>
