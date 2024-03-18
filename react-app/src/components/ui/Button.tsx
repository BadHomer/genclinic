import { ReactNode} from "react";

export function Button(props: {onClick : () => void, classes: string, children: ReactNode}) {
    return (
        <>
            <button onClick={props.onClick} className={props.classes}>{props.children}</button>
        </>
    );
}
