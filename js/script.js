const list = document.querySelector('.list');
const li = document.querySelectorAll("li");
console.log(li[0]);
const audio = new Audio();
console.log(js_data_array);
let song_name, song_path, temp_toggle;

// select song
    list.addEventListener('click', (e) => {
    e.preventDefault();
    console.log(e);
        if (temp_toggle) { temp_toggle.classList.remove('playing') }
        e.target.classList.add('playing');
        temp_toggle = e.target;
        song_name = e.target.innerText;
        playsong();
    })

let playsong = () => {
    song_path = `./audio/${song_name}.mp3`;
    audio.src = song_path;
    audio.play();
    
}





