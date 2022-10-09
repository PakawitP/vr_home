export const OAuth = false; //เลือกรูปเเบบการเข้าระบบ true = OAuth; fasle = User Password
let directory = false; //เลือกที่ตั้งไฟลืรูปภาพ true = directory server ; false = directory local 
function choDir() {
    if (directory) {
        return `${window.location.protocol}//${window.location.hostname}/iot/acc_assets/images/`
    } else {
        return `${window.location.protocol}//${window.location.hostname}/acc_assets/images/`
    }
    // return
}

export let ref = choDir()
// export let ref = `${window.location.protocol}//${window.location.hostname}/iot/acc_assets/images/`  //producttion
//export let ref = `${window.location.protocol}//${window.location.hostname}/acc_assets/images/` //localtest