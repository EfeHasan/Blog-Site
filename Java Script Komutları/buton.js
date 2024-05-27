const darkMode = document.getElementById("dark-mode");

const loadDarkModeCSS = () => 
{
    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "Css komutları/darkMode.css";
    link.id = "dark-mode";
    document.head.appendChild(link);
}

const unloadDarkModeCSS = () =>
 {
    const existingDarkModeLink = document.getElementById("dark-mode");
    if (existingDarkModeLink)
     {
        existingDarkModeLink.parentNode.removeChild(existingDarkModeLink);
    }
}

const toggleMode = () => {

    const darkModeLink = document.getElementById("dark-mode");
    if (darkModeLink) 
    {
        unloadDarkModeCSS();
        modeToggleButton.textContent = "Dark Mode";
    } 
    else 
    {
        loadDarkModeCSS();
        modeToggleButton.textContent = "Light Mode";
        modeToggleButton.style.width="160px"
    }
}

const modeToggleButton = document.getElementById("mode-toggle-button");
modeToggleButton.addEventListener("click", toggleMode);
