import '@/styles/header.scss'
import logo from '@/assets/images/header/logo.svg'
import {HeaderNavBar} from "@/components/header/HeaderNavBar";

export function Header() {
    return (
        <>
            <header>
                <a href="/" className=""><img className="header-logo" src={logo} alt={'logo'}/> </a>
                <HeaderNavBar />
                <button className="header-search">
                    12312313
                </button>
            </header>
        </>
    );
}
