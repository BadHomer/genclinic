import {useEffect, useState} from "react";
import * as React from "react";
import IntrinsicElements = React.JSX.IntrinsicElements;

interface IProps {
    items : Array<any>,
    limit : number,
    render: IntrinsicElements

}

export function InfiniteScroll(props : IProps) {
    const [isMyFetching,setIsFetchingDown]=useState(false)
    const [isMyFetchingUp,setIsMyFetchingUp]=useState(false)
    const scrollHandler=(e:any):void=>{
        if(e.target.documentElement.scrollTop<50)
        {
            setIsMyFetchingUp(true)
        }
        if(e.target.documentElement.scrollHeight-e.target.documentElement.scrollTop-window.innerHeight<50)
        {
            setIsFetchingDown(true)
            window.scrollTo(0,(e.target.documentElement.scrollHeight + e.target.documentElement.scrollTop));
        }
    }

    useEffect(()=>{
        if(isMyFetching)
        {
            setCurrentPostStart(prev=>{
                return prev<93?prev+1:prev
            })
            setIsFetchingDown(false)

        }
    },[isMyFetching])

    return (
        <>
        <div>
        </div>
        </>
    );
}




