

//เช็คค่าที่ส่งมาจาก database ว่ามีสิทธิเข้าถึงหรือไม่ของฝั่ง Frontend ถ้าไม่ redirect ไป index

export const checkData = (permissionBE) => {
    if (permissionBE == user_check.user) {
        return
    } else {
        window.location.href = '../views/index.php'
    }
} 