const getRemainTime = deadline => {
let now = new Date,
    remainTime = (new Date(deadline)- now + 1000) / 1000,
    remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
    remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
    remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
    remainDays = Math.floor(remainTime/(3600*24))

    return{
        remainTime,
        remainSeconds,
        remainMinutes,
        remainHours,
        remainDays
    }
};
const countdotwn = (deadline, elem, finalmess) =>{
    const el = document.getElementById(elem);

    const timer = setInterval( () => {
        let t = getRemainTime(deadline);
        let fixremainTime;
        if(t.remainDays<10){
           fixremainTime = '0' + t.remainDays;
        }else {
            fixremainTime = t.remainDays;
        }
        el.innerHTML = `<li><div><h3>${fixremainTime}</h3><span>Dias</span></div></li><li><div><h3>${t.remainHours}</h3><span>Horas</span></div></li><li><div><h3>${t.remainMinutes}</h3><span>Minutos</span></div></li><li><div><h3>${t.remainSeconds}</h3><span>Secgundos</span></div></li>`;
        if(fixremainTime <= 1){
            clearInterval(timer);
            el.innerHTML = finalmess;
        }
    },1000)
};
countdotwn('Sep 30 2018 00:00:00 UTC-0600', 'clock','terminado');
///