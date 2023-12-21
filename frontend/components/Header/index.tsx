import React from 'react';

const Header: React.FC = () => {
    return (
        <header className="bg-gray-800 text-white">
            <div className="container mx-auto flex justify-center items-center py-4">
                <nav className="flex items-center space-x-6">
                    <a href="/" className="hover:text-gray-300">Home</a>
                    <a href="/about" className="hover:text-gray-300">About</a>
                    <a href="/contact" className="hover:text-gray-300">Contact</a>
                    {/* Add more links as needed */}
                </nav>
            </div>
        </header>
    );
};

export default Header;
