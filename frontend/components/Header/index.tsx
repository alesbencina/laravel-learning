import React from 'react';
import Link from "next/link";

const Header: React.FC = () => {
    return (
        <header className="bg-gray-800 text-white">
            <div className="container mx-auto flex justify-center items-center py-4">
                <nav className="flex items-center space-x-6">
                    <Link href={`/`} key={0}>
                        Home
                    </Link>
                    <Link href={`/blog/about`} key={0}>
                        About me
                    </Link>
                    <Link href={`/contact`} key={0}>
                        Contact
                    </Link>
                    {/* Add more links as needed */}
                </nav>
            </div>
        </header>
    );
};

export default Header;
