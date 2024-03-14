import {HeaderNavLink} from "@/components/header/HeaderNavLink";
import {links} from "@/staticData/headerLinks"
export function HeaderNavBar() {
    return (
        <>
            <nav className="header-navbar">
                {links.map(
                    p => <HeaderNavLink title={p.title} link={p.link} key={Math.random()}/>
                )}
            </nav>
        </>
    );
}



