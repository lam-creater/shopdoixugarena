<?php
session_start(); // Bắt đầu session để lưu thông tin người dùng

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy giá trị player_id từ form
    $playerId = $_POST['player_id'];

    // Kiểm tra nếu player_id hợp lệ (có thể thêm logic kiểm tra)
    if (!empty($playerId)) {
        // Giả sử đăng nhập thành công
        $_SESSION['player_id'] = $playerId;  // Lưu thông tin người dùng vào session

        // Trả về JSON để xử lý kết quả trên frontend
        echo json_encode([
            'status' => 1,
            'msg' => 'Đăng nhập thành công',
            'player_id' => $playerId,
        ]);
    } else {
        // Trường hợp không nhập player_id
        echo json_encode([
            'status' => 0,
            'msg' => 'Vui lòng nhập UID tài khoản.',
        ]);
    }
} else {
    echo json_encode([
        'status' => 0,
        'msg' => 'Yêu cầu không hợp lệ.',
    ]);
}
?>
