<?php
function getSectionContent($section_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT content FROM sections WHERE id = ?");
    $stmt->bind_param("i", $section_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['content'];
}

function updateSectionContent($section_id, $content) {
    global $conn;
    $stmt = $conn->prepare("UPDATE sections SET content = ? WHERE id = ?");
    $stmt->bind_param("si", $content, $section_id);
    return $stmt->execute();
}
?>
