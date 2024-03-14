import {NavLink} from "react-router-dom";



export function HeaderNavLink(navLink: {link : string, title : string}) {
    return (
        <>
            <NavLink className="header-navbar-item" to={navLink.link} > {navLink.title} </NavLink>
        </>
    );
}
