// ==========================================
// 1. REFERENCIAS A ELEMENTOS DEL HTML
// ==========================================
const authContainer = document.getElementById('authContainer');
const agendaContent = document.getElementById('agendaContent');
const list = document.getElementById('contactList');

// ==========================================
// 2. FUNCIONES DE AUTENTICACIÓN
// ==========================================

function toggleAuth() {
    const login = document.getElementById('loginForm');
    const reg = document.getElementById('registerForm');
    login.style.display = login.style.display === 'none' ? 'block' : 'none';
    reg.style.display = reg.style.display === 'none' ? 'block' : 'none';
}

async function register() {
    const nombre = document.getElementById("regName").value.trim();
    const correo = document.getElementById("regEmail").value.trim();
    const pass = document.getElementById("regPass").value.trim();

    if (!nombre || !correo || !pass) {
        alert("❌ Llena todos los campos");
        return;
    }

    if (pass.length < 8 || pass.length > 10) {
        alert("❌ La contraseña debe tener entre 8 y 10 caracteres.");
        return;
    }

    try {
        const res = await fetch('api.php?action=register', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ nombre, correo, pass })
        });
        const data = await res.json();
        
        if (res.ok) {
            alert("✅ Registro exitoso");
            toggleAuth();
        } else {
            alert("❌ " + data.error);
        }
    } catch (e) { 
        alert("❌ Error de conexión"); 
    }
}

async function login() {
    const user = document.getElementById('loginUser').value.trim();
    const pass = document.getElementById('loginPass').value.trim();

    try {
        const res = await fetch('api.php?action=login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ user, pass })
        });
        const data = await res.json();

        if (res.ok) {
            authContainer.style.display = 'none';
            agendaContent.style.display = 'block';
            renderContacts(); 
        } else {
            alert("❌ " + (data.error || "Datos incorrectos"));
        }
    } catch (e) { 
        alert("❌ Error al conectar con el servidor"); 
    }
}

// ==========================================
// 3. GESTIÓN DE CONTACTOS (CORREGIDO)
// ==========================================

async function renderContacts(filter = '') {
    try {
        const res = await fetch('api.php');
        const contacts = await res.json();
        list.innerHTML = ''; 

        // Recorremos sobre la lista original para mantener el índice real 'i'
        contacts.forEach((c, i) => {
            const nombre = c.name || "";
            // Filtramos aquí adentro para que el botón de borrar siempre use el ID correcto
            if (nombre.toLowerCase().includes(filter.toLowerCase())) {
                const div = document.createElement('div');
                div.className = 'contact-item';
                div.style = "background:#333; padding:10px; margin-bottom:5px; border-radius:5px; color:white; overflow:hidden;";
                
                div.innerHTML = `
                    ${c.name} - ${c.phone} - ${c.email} 
                    <button onclick="deleteContact(${i})" style="background:red; width:auto; float:right; border:none; color:white; padding:5px 10px; cursor:pointer; border-radius:3px;">X</button>
                `;
                list.appendChild(div);
            }
        });
    } catch (e) { 
        console.log("Error cargando contactos:", e); 
    }
}

async function addContact() {
    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const email = document.getElementById('email').value.trim();

    if (!name || !phone || !email) {
        alert("❌ Llena todos los campos del contacto.");
        return;
    }

    await fetch('api.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name, phone, email }) 
    });

    document.getElementById('name').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('email').value = '';
    
    renderContacts(); 
    alert("✅ Contacto guardado correctamente");
}

// --- ESTA ES LA FUNCIÓN QUE TE FALTABA PARA QUE EL BOTÓN FUNCIONE ---
async function deleteContact(index) {
    if (!confirm("¿Seguro que quieres eliminar este contacto?")) return;

    try {
        const res = await fetch('api.php?action=delete', {
            method: 'POST', // Usamos POST con una acción específica
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ index: index })
        });

        if (res.ok) {
            renderContacts(); // Refrescamos la lista tras borrar
        }
    } catch (e) {
        alert("Error al intentar eliminar.");
    }
}

// ==========================================
// 4. CERRAR SESIÓN
// ==========================================

const logoutBtn = document.getElementById('logoutBtn');
if (logoutBtn) {
    logoutBtn.onclick = () => {
        if (confirm("¿Estás seguro de que quieres cerrar sesión?")) {
            location.reload();
        }
    };
}