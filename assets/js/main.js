function showSection(sectionId) {
    // Display loading div
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = 'flex';

    // Hide all sections
    var sections = document.querySelectorAll('section');
    sections.forEach(function (section) {
        section.classList.add('hidden');
    });

    // Show the selected section after 2 seconds
    setTimeout(function () {
        // Hide loading div
        loadingDiv.style.display = 'none';

        // Show the selected section
        var selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
            selectedSection.classList.remove('hidden');
        }
    }, 500);
}

// By default, show the home section
showSection('home');

let mydata = {
    // ... (your data here)
}

function getAllSongs(musicData) {
    const allSongs = [];

    musicData.Artists.forEach((artist) => {
        allSongs.push(...artist.songs);
    });

    return allSongs;
}

// Example usage:
const siteData = mydata;

// Get all songs from the entire music data
const allSongs = getAllSongs(siteData);
console.log("All Songs:", allSongs);