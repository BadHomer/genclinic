import {configureStore} from "@reduxjs/toolkit";
import reducer from "./recordModalStateReducer";
export const modalStateStore =  configureStore({reducer: reducer})

export type RootState = ReturnType<typeof modalStateStore.getState>
export type AppDispatch = typeof modalStateStore.dispatch
export type AppStore = typeof modalStateStore;
