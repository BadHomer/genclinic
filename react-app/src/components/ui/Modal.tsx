import React from "react";
import '@/styles/components/ui/modal.scss'
import {Button} from "@/components/ui/Button";
import CloseIcon from '@mui/icons-material/Close';
import {useAppDispatch, useAppSelector} from "@/core/hooks/storeHooks";
import {closeModal} from "@/core/store/recordModalState/recordModalStateReducer";


export function Modal(props: { children : React.ReactNode }) {
    const isOpen = useAppSelector((state) => state.recordModalState.isOpen);
    const dispatch = useAppDispatch();

    console.log()
    return (
        <>
            {isOpen &&
                <>
                    <div className='modal-backdrop'>
                        <div className='modal-container'>
                            <div className='modal-header' >
                                <h2>Форма записи</h2>
                                <Button classes={''} onClick={() => dispatch(closeModal())}><><CloseIcon/></></Button>
                            </div>
                            <div className='modal-body'>
                                {props.children}
                            </div>
                            <div className='modal-footer'>

                            </div>
                        </div>
                    </div>
                </>
            }
        </>
    );
}
