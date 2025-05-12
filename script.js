function bestel(productNaam) {
    fetch('mail.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'product=' + encodeURIComponent(productNaam)
    })
    .then(response => response.text())
    .then(data => alert('Bestelling verzonden naar Peter!'))
    .catch(error => console.error('Fout:', error));
}
