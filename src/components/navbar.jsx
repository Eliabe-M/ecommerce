import React from 'react';

export default function Navbar() {
    return (
        <nav>
            <ul>
                <li><Link to="/">Página Inicial</Link></li>
                <li><Link to="/home">Home</Link></li>
                <li><Link to="/carrinho">Meu carrinho</Link></li>
                <li><Link to="/login">Login/Logout</Link></li>
            </ul>
        </nav>
    );
}
