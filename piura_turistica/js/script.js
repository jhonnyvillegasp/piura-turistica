// Filtrar destinos por provincia
document.getElementById('provinciaSelect').addEventListener('change', function() {
    const provincia = this.value;
    const destinos = document.querySelectorAll('.destino');
    
    destinos.forEach(destino => {
        if (provincia === 'all' || destino.getAttribute('data-provincia') === provincia) {
            destino.style.display = 'block';
        } else {
            destino.style.display = 'none';
        }
    });
});

// Manejar el formulario de contacto
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validación básica
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const mensaje = document.getElementById('mensaje').value;
    
    if (!nombre || !email || !mensaje) {
        alert('Por favor, complete todos los campos obligatorios.');
        return;
    }
    
    // Si pasa la validación, enviar el formulario
    this.submit();
});

// Inicializar tooltips de Bootstrap
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});