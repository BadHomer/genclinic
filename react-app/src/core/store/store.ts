import { configureStore } from '@reduxjs/toolkit'
import recordModalStateReducer from "@/core/store/recordModalState/recordModalStateReducer";
// ...

export const store = configureStore({
    reducer: {
        recordModalState: recordModalStateReducer,
    },
})

// Infer the `RootState` and `AppDispatch` types from the store itself
export type RootState = ReturnType<typeof store.getState>
// Inferred type: {posts: PostsState, comments: CommentsState, users: UsersState}
export type AppDispatch = typeof store.dispatch

export type AppStore = typeof store;
