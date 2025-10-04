// Data cuaca untuk berbagai kota di Indonesia
const weatherDatabase = {
    "samarinda": { temp: 28, condition: "Mendung", humidity: 75 },
    "jakarta": { temp: 30, condition: "Cerah", humidity: 68 },
    "bandung": { temp: 25, condition: "Hujan Ringan", humidity: 82 },
    "surabaya": { temp: 31, condition: "Panas Terik", humidity: 65 },
    "medan": { temp: 28, condition: "Berawan", humidity: 78 },
    "yogyakarta": { temp: 27, condition: "Cerah Berawan", humidity: 72 },
    "semarang": { temp: 29, condition: "Mendung", humidity: 70 },
    "makassar": { temp: 32, condition: "Cerah", humidity: 66 },
    "palembang": { temp: 30, condition: "Berawan", humidity: 74 },
    "denpasar": { temp: 29, condition: "Cerah", humidity: 71 },
    "pontianak": { temp: 29, condition: "Hujan Ringan", humidity: 80 },
    "manado": { temp: 27, condition: "Cerah", humidity: 73 },
    "balikpapan": { temp: 30, condition: "Berawan", humidity: 76 },
    "pekanbaru": { temp: 31, condition: "Panas Terik", humidity: 67 },
    "banjarmasin": { temp: 29, condition: "Mendung", humidity: 79 }
};

// Fungsi untuk mengubah background sesuai cuaca
function changeBackgroundByWeather(condition) {
    const body = document.body;
    
    // Reset semua class cuaca
    body.classList.remove('cerah', 'mendung', 'berawan', 'hujan', 'panas', 'default');
    
    // Tentukan class berdasarkan kondisi cuaca
    if (condition.toLowerCase().includes('cerah')) {
        body.classList.add('cerah');
    } else if (condition.toLowerCase().includes('mendung')) {
        body.classList.add('mendung');
    } else if (condition.toLowerCase().includes('berawan')) {
        body.classList.add('berawan');
    } else if (condition.toLowerCase().includes('hujan')) {
        body.classList.add('hujan');
    } else if (condition.toLowerCase().includes('panas')) {
        body.classList.add('panas');
    } else {
        body.classList.add('default');
    }
}

// Fungsi untuk mendapatkan emoji cuaca
function getWeatherEmoji(condition) {
    if (condition.toLowerCase().includes('cerah')) return '☀️';
    if (condition.toLowerCase().includes('mendung')) return '☁️';
    if (condition.toLowerCase().includes('berawan')) return '⛅';
    if (condition.toLowerCase().includes('hujan')) return '🌧️';
    if (condition.toLowerCase().includes('panas')) return '🔥';
    return '🌤️';
}

// Fungsi untuk mendapatkan data cuaca
function getWeatherData(cityName) {
    const city = cityName.toLowerCase().trim();
    
    if (weatherDatabase[city]) {
        return {
            city: cityName,
            ...weatherDatabase[city]
        };
    } else {
        // Data random jika kota tidak ditemukan
        const conditions = ["Cerah", "Mendung", "Berawan", "Hujan Ringan", "Panas Terik"];
        return {
            city: cityName,
            temp: Math.floor(Math.random() * 10) + 25, // 25-34°C
            condition: conditions[Math.floor(Math.random() * conditions.length)],
            humidity: Math.floor(Math.random() * 25) + 60 // 60-85%
        };
    }
}

// Fungsi untuk menampilkan hasil cuaca
function displayWeather(weatherData) {
    const weatherResult = document.getElementById('weatherResult');
    const cityName = document.getElementById('cityName');
    const temperature = document.getElementById('temperature');
    const condition = document.getElementById('condition');
    const consoleOutput = document.getElementById('consoleOutput');
    
    // Update tampilan cuaca
    cityName.textContent = weatherData.city;
    temperature.textContent = `${weatherData.temp}°C`;
    condition.innerHTML = `${getWeatherEmoji(weatherData.condition)} ${weatherData.condition}`;
    
    // Ubah background sesuai cuaca
    changeBackgroundByWeather(weatherData.condition);
    
    // Tampilkan hasil dengan animasi
    weatherResult.style.display = 'block';
    weatherResult.classList.remove('fade-in');
    void weatherResult.offsetWidth; // Force reflow
    weatherResult.classList.add('fade-in');
    
    // Tampilkan dan update console output
    consoleOutput.style.display = 'block';
    consoleOutput.classList.remove('slide-up');
    void consoleOutput.offsetWidth; // Force reflow
    consoleOutput.classList.add('slide-up');
    
    consoleOutput.querySelector('.console-content').innerHTML = `
        <div>Cuaca di ${weatherData.city}:</div>
        <div>Suhu: ${weatherData.temp}°C</div>
        <div>Kondisi: ${weatherData.condition}</div>
        <div>Background berubah sesuai cuaca! ${getWeatherEmoji(weatherData.condition)}</div>
    `;
    
    // Console log untuk developer (sesuai gambar)
    console.log(`Cuaca di ${weatherData.city}:`);
    console.log(`Suhu: ${weatherData.temp}°C`);
    console.log(`Kondisi: ${weatherData.condition}`);
    console.log(`Background: ${weatherData.condition.toLowerCase()}`);
}

// Fungsi untuk handle submit
function handleSubmit() {
    const cityInput = document.getElementById('cityInput');
    const submitBtn = document.getElementById('submitBtn');
    const cityName = cityInput.value.trim();
    
    if (!cityName) {
        alert('Mohon masukkan nama kota!');
        cityInput.focus();
        return;
    }
    
    // Loading state
    submitBtn.disabled = true;
    submitBtn.classList.add('loading');
    submitBtn.textContent = 'Memuat Cuaca...';
    
    // Simulasi delay untuk mendapatkan data cuaca
    setTimeout(() => {
        const weatherData = getWeatherData(cityName);
        displayWeather(weatherData);
        
        // Reset button
        submitBtn.disabled = false;
        submitBtn.classList.remove('loading');
        submitBtn.textContent = 'Tampilkan Cuaca';
        
        // Clear input untuk pencarian berikutnya
        // cityInput.value = '';
    }, 1500);
}

// Event listeners
document.getElementById('submitBtn').addEventListener('click', handleSubmit);

document.getElementById('cityInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        handleSubmit();
    }
});

// Focus pada input saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cityInput').focus();
    
    console.log('Weather Dashboard siap digunakan!');
    console.log('Masukkan nama kota untuk melihat cuaca...');
    console.log('Background akan berubah sesuai kondisi cuaca! 🌤️');
});

// Suggestion cities (opsional - bisa ditampilkan sebagai hint)
const popularCities = ['Jakarta', 'Bandung', 'Surabaya', 'Medan', 'Samarinda', 'Yogyakarta'];

document.getElementById('cityInput').addEventListener('focus', function() {
    console.log('Kota populer:', popularCities.join(', '));
});